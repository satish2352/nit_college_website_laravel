@extends('website.layout.master')
@section('content')
    <style>
        /* Styles for button focus/active states and gallery adjustments */
        .btn:focus,
        .btn:active,
        button:focus,
        button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer {
            display: block;
        }

        .thumb {
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>

    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
        <div class="container">
            <div class="col-sm-12" style="padding:0;">
                <center>
                    <h2 style="color:green"><strong>Gallery</strong></h2>
                </center>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background:#fff; padding-top:40px; padding-bottom:40px">
        <div class="container">
            <div class="row">
                @foreach ($data_output as $index => $gallery_data)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="{{ $index + 1 }}" data-toggle="modal"
                           data-title="Image {{ $index + 1 }}"
                           data-image="{{ Config::get('DocumentConstant.GALLERY_VIEW') . $gallery_data['fld_gallery_photo'] }}"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="{{ Config::get('DocumentConstant.GALLERY_VIEW') . $gallery_data['fld_gallery_photo'] }}"
                                 alt="Image {{ $index + 1 }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="image-gallery-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-left" id="show-previous-image">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                    <button type="button" id="show-next-image" class="btn btn-secondary float-right">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        // JavaScript/JQuery for gallery functionality and animations
        $(document).ready(function () {
            let modalId = $('#image-gallery');

            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image').click(function () {
                    if ($(this).attr('id') === 'show-previous-image') {
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id="' + current_image + '"]');
                    updateGallery(selector);
                });

                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-title').text($sel.data('title'));
                    $('#image-gallery-image').attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]').each(function () {
                        counter++;
                        $(this).attr('data-image-id', counter);
                    });
                }
                $(setClickAttr).on('click', function () {
                    updateGallery($(this));
                });
            }

            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image').show();
                if (counter_max === counter_current) {
                    $('#show-next-image').hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image').hide();
                }
            }

            loadGallery(true, 'a.thumbnail');

            $(document).keydown(function (e) {
                switch (e.which) {
                    case 37: // left arrow key
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image').click();
                        }
                        break;

                    case 39: // right arrow key
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                            $('#show-next-image').click();
                        }
                        break;

                    default:
                        return; // exit handler for other keys
                }
                e.preventDefault(); // prevent default action (scroll / caret move)
            });
        });
    </script>
@endsection
<style>
    /* CSS styles for button states, gallery, and image animations */
.btn:focus,
.btn:active,
button:focus,
button:active {
    outline: none !important;
    box-shadow: none !important;
}

.thumb {
    margin-top: 15px;
    margin-bottom: 15px;
}

/* Additional styles for image animations and layout */
.modal-content {
    animation: fadeIn .5s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>