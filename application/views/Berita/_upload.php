<div class="row">
                            <div class="col-lg-12 mb-30">
                                <div class="portlet-box">
                                    <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                                        <div class="flex d-flex flex-column">
                                            <h3>Silahkan upload gambar disini</h3> 
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form  action="Berita/uploadImage" class="dropzone" id="dropzoneForm" enctype="multipart/form-data">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>


<script>
    jQuery(function ($) { 
        $(".summernote-init").summernote({
        height: 300,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });


try {
    var myDropzone = new Dropzone("#dropzoneForm", {
        paramName: "file", // The name that will be used to transfer the file
        // maxFilesize: 0.5, // MB
        //acceptedFiles: ".csv",

        addRemoveLinks: false,
                        dictResponseError: 'Error while uploading file!',
                        success: function (file, returnResult) {
                            if (file.previewElement) {
                                successMsg("Upload Image", "Image has been uploaded successfully");
                            }
                        },
                        complete: function () {

                        },
                        error: function (file, errormessage) {
                            if (file.previewElement) {
                                errMsg("Error", errormessage);
                                file.previewElement.classList.add("dz-error");
                            }
                        },
                    });

                    myDropzone.on('sending', function (file, xhr, formData) {
                        //                                formData.append('uploadType', gUploadType);
                        //                                formData.append('modelCd', gUploadModelCd);
                        //                                formData.append('prodMonth', gUploadProdMonth);
                    });

                    myDropzone.on("complete", function (file) {
                        console.log(file);
                        $("#hdImgFile").val(file.name);
                        myDropzone.removeFile(file);
                    });

                    $(document).one('ajaxloadstart.page', function (e) {
                        try {
                            myDropzone.destroy();
                        } catch (e) { }
                    });

                } catch (e) {
                    alert(e);
                }

        });
            
</script>