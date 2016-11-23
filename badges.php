<div class="container-fluid bg-2 text-center white-text" id='badges'>
    <h2>Badges</h2>
    <div class="row">
        <div class="text-center">
            <div id='display'></div>
            <!-- The Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class='modal-header' id="modalTitle">Title</h2>
                        </div>

                        <div class="modal-body">
                            <div class='modalbadges' id="modalBadge"><img src="" alt=""></div>
                            <p class='modal-body' id="modalP">Some text in the Modal..</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                // Fetching badge info for display
                function badges(arr) {

                    var output = "";
                    var i;
                    var modalInfo = [];
                    var modalTitle = [];
                    var modalBadgeImg = [];

                    //display badge buttons
                    for (i = 0; i < arr.length; i++) {
                        output += '<div class="col-sm-3 individual text-center"><input type="image" class="img-circle  modalBtn" data-toggle="modal" data-target="#myModal" id="' + i + '"   src="' + arr[i].imgsrc + '" alt="' + arr[i].name + '"><h3 id="badgeTitles">' + arr[i].name + '</h3></div>';
                        //Modal display    
                        modalInfo.push(arr[i].info);
                        modalTitle.push(arr[i].name);
                        modalBadgeImg.push(arr[i].imgsrc);
                    }
                    document.getElementById('display').innerHTML = output;

                    //Clicking on button changes modal info to suit
                    $(".modalBtn").click(function () {
                        modal.style.display = "block";
                        var ID = innerHTML = this.id;
                        document.getElementById("modalTitle").innerHTML = modalTitle[ID];
                        document.getElementById("modalBadge").innerHTML = '<img src="' + modalBadgeImg[ID] + '" alt="' + modalBadgeImg[ID] + '">';
                        document.getElementById("modalP").innerHTML = modalInfo[ID];
                        console.log(this.id);
                    });


                    // Get the modal
                    var modal = document.getElementById('myModal');
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function () {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function (event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                }
            </script>
            <script src="badges.json"></script>
        </div>
    </div>
</div>
