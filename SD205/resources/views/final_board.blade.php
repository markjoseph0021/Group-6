<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset ('/styles/normalize.css')}}">
    <link rel="stylesheet" href="{{asset ('/styles/pin_styles.css')}}">
    <link rel="stylesheet" href="{{asset ('/styles/modal_styles.css')}}">
    <link rel="stylesheet" href="{{asset ('/styles/final_board.css')}}">
    <link href="{{ asset('styles/landing_page_style.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="{{asset ('/styles/nav_style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>

<body>

    <div class="nav">
        <li><img src="logo.png" alt="logo" width="30" height="30"></li>
        <li><a href="/home">Home</a></li>
        <li>Today</li>
        <li class="search"><input type="text" placeholder="Search"></li>
        <li class="notification"><i class="fas fa-bell"></i></li>
        <li><i class="far fa-comment-dots"></i></li>
        <li class="profile"><img src="/images/profile.png" alt="profile" width="30" height="30"></li>
    </div>

    <div class="navigation_bar">
        <div class="pint_mock_icon_container add_pin">
            <img src="./images/add.png" alt="add_pin" class="pint_mock_icon">
        </div>
    </div>

    <table>
        <tr>
            <th class="pin_title">Title</th>
            <th class="pin_title">Description</th>
            <th class="pin_title">Link</th>
            <th class="pin_title">Image</th>
            <th class="pin_title">Size</th>

        </tr>

        @foreach($posts as $post)
           
            <tr>
                <div class="pin_container">
                    <div class="card">
                        <div class="pin_modal">>
                    <th class="pin_title" >{{ $post->pin_size }}</th>
                    <th class="pint_title">{{ $post->pin_title }}</th>
                    <th class="pint_title">{{ $post->pin_description }}</th>
                    <th>{{ $post->pin_link }}</th>
                    <th><img src="{{ url('/images/'.$post->pin_image) }}" alt=""></th>
                    </div>
                    </div>
                </div>
                
            </tr>
        @endforeach
    </table>
</div>
</div>
</div>


    <div class="pin_container">
        <div class="card card_small">
            <img src="/images/1666506459.gif" alt="">
            <div class="pin_modal">
            <div class="modal_head">
                <div class="save_card">Save</div>
            </div>

            <div class="modal_foot">
                <div class="destination">
                    <div class="pint_mock_icon_container">
                        <img src="./images/upper-right-arrow.png" alt="destination" class="pint_mock_icon">
                    </div>
                    <a href="/medium_modal"><span>Eatery</span></a>
                </div>

                <div class="pint_mock_icon_container">
                    <img src="./images/send.png" alt="send" class="pint_mock_icon">
                </div>

                <div class="pint_mock_icon_container">
                    <img src="./images/ellipse.png" alt="edit" class="pint_mock_icon">
                </div>
            </div>
        </div>
    </div>
        <div class="card card_medium">
        <img src="/images/1666506858.jpg" alt="">
            <div class="pin_modal">
            <div class="modal_head">
                <div class="save_card">Save</div>
            </div>

            <div class="modal_foot">
                <div class="destination">
                    <div class="pint_mock_icon_container">
                        <img src="./images/upper-right-arrow.png" alt="destination" class="pint_mock_icon">
                    </div>
                    <span>Eatery</span>
                </div>

                <div class="pint_mock_icon_container">
                    <img src="./images/send.png" alt="send" class="pint_mock_icon">
                </div>

                <div class="pint_mock_icon_container">
                    <img src="./images/ellipse.png" alt="edit" class="pint_mock_icon">
                </div>
            </div>
        </div>
    </div>
    

    <form action="{{ route('post.post') }}", method="POST" enctype="multipart/form-data">
     @csrf
    <div class="add_pin_modal">
        <div class="add_pin_container">
            <div class="side" id="left_side">
                <div class="section1">
                    <div class="pint_mock_icon_container">
                        <img src="./images/ellipse.png" alt="edit" class="pint_mock_icon">
                    </div>
                </div>

                <div class="section2">
                    <label for="upload_img" id="upload_img_label">
                        <div class="upload_img_container">
                            <div id="dotted_border">
                                <div class="pint_mock_icon_container">
                                    <img src="./images/up-arrow.png" alt="upload_img"  class="pint_mock_icon">
                                </div>
                                <div>Click to upload</div>
                                <div>Recommendation: Use high-quality .jpg files less than 20MB</div>
                            </div>
                        </div>
                        <input type="file" name="image" id="upload_img">
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
                            <option value="" disabled selected>Select</option>
                            <option value="small">small</option>
                            <option value="medium">medium</option>
                            <option value="large">large</option>
                        </select>
                        <button type="submit" class="">Save</button>
                    </div>
                </div>

                <div class="section2">
                    <input placeholder="Add your title" type="text" class="new_pin_input" id="pin_title" name ="pin_title">
                    <input placeholder="Tell everyone what your Pin is about" type="text" class="new_pin_input" id="pin_description" name="pin_description">
                    <input placeholder="Add a destination link" type="text" class="new_pin_input" id="pin_destination" name="pin_link">
                </div>
            </div>
        </div>
    </div>
</form>

    <script src="{{ asset ('./scripts/final_board.js') }}"></script>
</body>

</html>