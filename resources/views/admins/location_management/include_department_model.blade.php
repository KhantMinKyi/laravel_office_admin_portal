{{-- Popup Department Add Model --}}
<div class="hidden fixed top-32 right-5 bottom-0 xl:left-72 md:left-1/4 overflow-y-auto" id="popup-department-add-model">
    <div class="fixed top-10 right-0 bottom-0 left-0 bg-black opacity-50">
    </div>
    <div class="flex items-center justify-center">
        <div class="p-10 bg-white text-black dark:bg-mainbody-800 dark:text-white relative rounded">
            <button class="absolute top-0 right-0 px-4 pt-4 " onclick="togglePopupDepartmentAddModel()">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
            <div>
                <h4 class="flex justify-center mb-4 font-semibold text-gray-500 dark:text-gray-100">Add Department Form
                </h4>
                {{-- Include Create Department --}}
                @include('admins.partial_view.location_management.department.create_department')
            </div>

        </div>
    </div>
</div>
{{-- Popup Department View Model --}}
<div class="hidden fixed top-32 right-5 bottom-0 xl:left-72 md:left-1/4 overflow-y-auto"
    id="popup-department-view-model">
    {{-- Include Department View --}}
</div>
{{-- Popup Edit Model --}}
<div class="hidden fixed top-32 right-5 bottom-0 xl:left-72 md:left-1/4 overflow-y-auto"
    id="popup-department-edit-model">


    {{-- Include Edit Department --}}
</div>
