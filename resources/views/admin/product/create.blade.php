@extends('admin.layouts.main')
@section('content')
    <div class="container col-10 mb-5" style="background-color: white">
        <form class="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control form-control-solid" placeholder="Enter product name"/>
                </div>
                <div class="form-group">
                    <label for="size">Size:</label>
                    <input type="number" name="size" class="form-control form-control-solid" placeholder="Enter size of the product"/>
                </div>
                <div class="form-group">
                    <label for="measruing_unit">Measruing Unit:</label>
                    <div></div>
                    <select class="custom-select form-control" name="measruing_unit">
                        <option selected="selected">Open this select menu</option>
                        <option value="جرام">Gram</option>
                        <option value="لتر">Liter</option>
                        <option value="مل">Milli</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="image-input image-input-outline" id="kt_image_4" style="background-image: url('{{asset('assets/media/>users/blank.png')}}')">
                        <div class="image-input image-input-empty image-input-outline" id="kt_image_5"
                             style="background-image: url('{{asset('assets/media/users/blank.png')}}')">
                            <div class="image-input-wrapper"></div>

                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                <input type="hidden" name="profile_avatar_remove"/>
                            </label>

                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                  <i class="ki ki-bold-close icon-xs text-muted"></i>
                 </span>

                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                  <i class="ki ki-bold-close icon-xs text-muted"></i>
                 </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend"><span class="input-group-text" >₪</span></div>
                        <input type="text" class="form-control form-control-solid" placeholder="Price"/>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        var avatar4 = new KTImageInput('kt_image_4');

        avatar4.on('cancel', function(imageInput) {
            swal.fire({
                title: 'Image successfully canceled !',
                type: 'success',
                buttonsStyling: false,
                confirmButtonText: 'Awesome!',
                confirmButtonClass: 'btn btn-primary font-weight-bold'
            });
        });

        avatar4.on('change', function(imageInput) {
            swal.fire({
                title: 'Image successfully changed !',
                type: 'success',
                buttonsStyling: false,
                confirmButtonText: 'Awesome!',
                confirmButtonClass: 'btn btn-primary font-weight-bold'
            });
        });

        avatar4.on('remove', function(imageInput) {
            swal.fire({
                title: 'Image successfully removed !',
                type: 'error',
                buttonsStyling: false,
                confirmButtonText: 'Got it!',
                confirmButtonClass: 'btn btn-primary font-weight-bold'
            });
        });
    </script>
@stop
