<div class="row">
                            <div class="col-lg-12 mb-30">
                                <div class="portlet-box">
                                    <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                                        <div class="flex d-flex flex-column">
                                            <h3>Silahkan upload disini</h3> 
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form  action="Buyer/uploadExcel" class="dropzone" id="dropzoneForm" enctype="multipart/form-data">
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

try {
    var myDropzone = new Dropzone("#dropzoneForm", {
        paramName: "file", // The name that will be used to transfer the file
        // maxFilesize: 0.5, // MB
        //acceptedFiles: ".csv",

        addRemoveLinks: false,
                        dictResponseError: 'Error while uploading file!',
                        success: function (file, returnResult) {
                            if (file.previewElement) {
                                successMsg("Upload data", "Data has been imported successfully");
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

                    });

                    myDropzone.on("complete", function (file) {
                        
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