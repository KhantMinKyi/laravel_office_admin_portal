function strToMatrix(str) {
    const matrix = [];
    for (let i = 0; i < 4; i++) {
        matrix.push([]);
        for (let j = 0; j < 4; j++) {
            matrix[i][j] = str.charCodeAt(i * 4 + j) || 0;
        }
    }
    return matrix;
}

function matrixToStr(matrix) {
    let str = "";
    for (let i = 0; i < 4; i++) {
        for (let j = 0; j < 4; j++) {
            str += String.fromCharCode(matrix[i][j]);
        }
    }
    return str;
}

function subBytes(state) {
    // Implement the SubBytes step of AES
    // (This is a simplified version for demonstration purposes)
    for (let i = 0; i < 4; i++) {
        for (let j = 0; j < 4; j++) {
            state[i][j] = state[i][j] ^ 0x5a; // Simple XOR operation, not secure for real-world use
        }
    }
    return state;
}

function inverseSubBytes(state) {
    // Implement the inverse of the SubBytes step for decryption
    // (This is a simplified version for demonstration purposes)
    for (let i = 0; i < 4; i++) {
        for (let j = 0; j < 4; j++) {
            state[i][j] = state[i][j] ^ 0x5a; // Simple XOR operation, not secure for real-world use
        }
    }
    return state;
}

function pkcs7Pad(text) {
    const blockSize = 16;
    const paddingLength = blockSize - (text.length % blockSize);
    const padding = String.fromCharCode(paddingLength).repeat(paddingLength);
    return text + padding;
}

function pkcs7Unpad(text) {
    const paddingLength = text.charCodeAt(text.length - 1);
    return text.slice(0, text.length - paddingLength);
}

function encryptBlock(block, keyMatrix) {
    // Implement encryption for a single block
    // (This is a simplified version for demonstration purposes)
    for (let i = 0; i < 4; i++) {
        for (let j = 0; j < 4; j++) {
            block[i][j] ^= keyMatrix[i][j];
        }
    }

    block = subBytes(block);

    return block;
}

function decryptBlock(block, keyMatrix) {
    // Implement decryption for a single block
    // (This is a simplified version for demonstration purposes)
    block = inverseSubBytes(block);

    for (let i = 0; i < 4; i++) {
        for (let j = 0; j < 4; j++) {
            block[i][j] ^= keyMatrix[i][j];
        }
    }

    return block;
}

$(document).on("click", "#btnDecryptCreateCityForTownship", function () {
    var selectedOption = $("#create_city_for_township_encryption_key").find(
        "option:selected"
    );
    var encryptedKey = selectedOption.data(
        "create_city_for_township_encryption_key"
    );
    $(".data_input_create_city_for_township").each(function (index) {
        var value = atob($(this).text());
        // alert(value);
        const keyMatrix = strToMatrix(encryptedKey);

        let result = "";
        for (let i = 0; i < value.length; i += 16) {
            const block = strToMatrix(value.slice(i, i + 16));
            const decryptedBlock = decryptBlock(block, keyMatrix);
            result += matrixToStr(decryptedBlock);
        }

        $(".data_input_create_city_for_township")
            .eq(index)
            .text(pkcs7Unpad(result));
    });
});

$(document).on("click", "#btnEncryptCreateCityForTownship", function () {
    var selectedOption = $("#create_city_for_township_encryption_key").find(
        "option:selected"
    );
    var encryptedKey = selectedOption.data(
        "create_city_for_township_encryption_key"
    );
    $(".data_input_create_city_for_township").each(function (index) {
        var value = $(this).text();
        const keyMatrix = strToMatrix(encryptedKey);

        let result = "";
        const paddedText = pkcs7Pad(value);
        for (let i = 0; i < paddedText.length; i += 16) {
            const block = strToMatrix(paddedText.slice(i, i + 16));
            const encryptedBlock = encryptBlock(block, keyMatrix);
            result += matrixToStr(encryptedBlock);
        }

        $(".data_input_create_city_for_township").eq(index).text(btoa(result));
    });
});
