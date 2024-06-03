function generateRandomKey(length) {
    const charset =
        "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    let key = "";
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        key += charset.charAt(randomIndex);
    }
    return key;
}
$(document).on("change", "#key_id", function () {
    var selectedOption = $(this).find("option:selected");
    var encryptedKey = selectedOption.data("encrypted");
    $("#key").val(encryptedKey);
});
$(document).on("click", "#btnGenerateRandomKey", function () {
    const generatedKey = generateRandomKey(32);
    $("#key").val(generatedKey);
});

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

$(document).on("click", "#btnEncrypt", function () {
    // function encrypt() {
    const inputText = document.getElementById("key").value;
    const masterKey = document.getElementById("master_key").value;

    const keyMatrix = strToMatrix(masterKey);

    let result = "";
    const paddedText = pkcs7Pad(inputText);
    for (let i = 0; i < paddedText.length; i += 16) {
        const block = strToMatrix(paddedText.slice(i, i + 16));
        const encryptedBlock = encryptBlock(block, keyMatrix);
        result += matrixToStr(encryptedBlock);
    }

    document.getElementById("key").value = btoa(result);
    // }
});

$(document).on("click", "#btnDecrypt", function () {
    // function decrypt() {
    const ciphertext = atob(document.getElementById("key").value);
    const masterKey = document.getElementById("master_key").value;

    const keyMatrix = strToMatrix(masterKey);

    let result = "";
    for (let i = 0; i < ciphertext.length; i += 16) {
        const block = strToMatrix(ciphertext.slice(i, i + 16));
        const decryptedBlock = decryptBlock(block, keyMatrix);
        result += matrixToStr(decryptedBlock);
    }

    document.getElementById("key").value = pkcs7Unpad(result);
    // }
});
