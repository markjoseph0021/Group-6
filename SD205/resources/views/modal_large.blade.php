<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset ('./styles/normalize.css')}}">
    <link rel="stylesheet" href="{{asset ('./styles/modal_styles_large.css')}}">
</head>

<body>
    <div class="add_pin_modal">
        <div class="add_pin_container">
            <div class="side" id="left_side">
                <div class="section1">
                    <div class="pint_mock_icon_container">
                    </div>
                </div>

                <div class="section2">
                    <label for="upload_img" id="upload_img_label">
                        <div class="upload_img_container">
                            <div id="dotted_border">
                                <div class="pint_mock_icon_container">
                                    <img src="./images/up-arrow.png" alt="upload_img" class="pint_mock_icon">
                                </div>
                                
                            </div>
                        </div>
                    </label>

                    <div class="modals_pin">
                        <div class="pin_image">
                            <!-- <img src="" alt="pin_image"> -->
                        </div>
                    </div>
                </div>

                <div class="section3">
                    <div class="save_from_site">Save From Site</div>
                </div>
            </div>

            <div class="side" id="right_side">
                <div class="section1">
                    <div class="select_size">
                        <select name="pin_size" id="pin_size">

                        </select>
                        <div class="save_pin">Save</div>
                    </div>
                </div>

                <div class="section2">
                    <h6 class="new_pin_input" id="pin_title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus rem, porro, ea molestias commodi doloremque provident libero ipsum labore veniam est enim fugiat nesciunt blanditiis iste quas dolore beatae omnis?</h6>
                    <h6 class="new_pin_input" id="pin_title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus rem, porro, ea molestias commodi doloremque provident libero ipsum labore veniam est enim fugiat nesciunt blanditiis iste quas dolore beatae omnis?</h6>
                    <h6 class="new_pin_input" id="pin_title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus rem, porro, ea molestias commodi doloremque provident libero ipsum labore veniam est enim fugiat nesciunt blanditiis iste quas dolore beatae omnis?</h6>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset ('./scripts/modal_script.js') }}"></script>
</body>

</html>