@extends('website.layout.master')
@section('content')
    <style>
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
    <script>
        let modalId = $('#image-gallery');

        $(document)
            .ready(function() {

                loadGallery(true, 'a.thumbnail');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image')
                        .show();
                    if (counter_max === counter_current) {
                        $('#show-next-image')
                            .hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image')
                            .hide();
                    }
                }

                /**
                 *
                 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
                 * @param setClickAttr  Sets the attribute for the click handler.
                 */

                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image')
                        .click(function() {
                            if ($(this)
                                .attr('id') === 'show-previous-image') {
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
                        $('#image-gallery-title')
                            .text($sel.data('title'));
                        $('#image-gallery-image')
                            .attr('src', $sel.data('image'));
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]')
                            .each(function() {
                                counter++;
                                $(this)
                                    .attr('data-image-id', counter);
                            });
                    }
                    $(setClickAttr)
                        .on('click', function() {
                            updateGallery($(this));
                        });
                }
            });

        // build key actions
        $(document)
            .keydown(function(e) {
                switch (e.which) {
                    case 37: // left
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image')
                                .click();
                        }
                        break;

                    case 39: // right
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                            $('#show-next-image')
                                .click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });
    </script>
    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
        <div class="container">

            <div class="col-sm-12" style="padding:0;">
                <center>
                    <h2 style="color:green"><strong>Gallery</strong></h2>
                </center>
                <!--<div class="pull-right"><img src="../up-images/index.html" alt="" class="img-responsive"></div>-->
            </div>

        </div>
    </div>
    <div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px">
        <div class="container">
            <div class="row">
                <div class="row">


                    @foreach ($data_output as $gallery_data)
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                                data-image="{{ Config::get('DocumentConstant.GALLERY_VIEW') }}{{ $gallery_data['fld_gallery_photo'] }}"
                                data-target="#image-gallery">
                                <img class="img-thumbnail"
                                    src="{{ Config::get('DocumentConstant.GALLERY_VIEW') }}{{ $gallery_data['fld_gallery_photo'] }}"
                                    alt="Another alt text">
                            </a>
                        </div>
                    @endforeach

                </div>


                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">×</span><span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                                        class="fa fa-arrow-left"></i>
                                </button>

                                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                                        class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="padding:0px">
                <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white">
                        <div class="col-sm-12">
                            <div>
                                <h2></h2>
                            </div>
                            <div>
                                <div class="row">


                                    <div class=" col-md-4" style="padding:5px"><!--<img src="../up-images/n1.jpg">--></div>

                                    <div class=" col-md-4" style="padding:5px"><!--<img src="../up-images/n2 copy.jpg">-->
                                    </div>

                                    <div class=" col-md-4" style="padding:5px"><!--<img src="../up-images/n3.jpg">--></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
                <div class="col-md-1 hidden-sm">&nbsp;</div>
                <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">

                    <div class="col-sm-12 right-col-fix">
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
