<?php require('./header.php');
        require('./sidebar4.php');
 ?>  
<div id="main">
<!--Page Content-->
<main id="pageContent" class="page has-sidebar">
    <div class="container-fluid relative animatedParent animateOnce" style="padding-top:100px !important;">
        <div class="animated fadeInUpShort p-md-5 p-3">            
            <section class="section">
                <div class="row">
                <div class="col s12 m12 l12">
                <div id="button-trigger" class="card card card-default scrollspy">
                    <div class="card-content">   
                        <h1 style="float: left;" class="mb-2" style="color:black; margin-left:10px;">Goals</h1>  
                        <div style="margin-top: 34px;float: right;margin-right: 26px;" class="row addgoal">
                                    <a id="addgoal" href="#goal-edit-modal" rel="modal:open" class="btn-floating mb-1 btn-large waves-effect waves-light">
                                        <i style="background-color: #f5109c;" class="material-icons">add</i>
                                    </a>
                                </div>                 
                        <div class="row">
                            <div class="col s12 goaldetailtable">
                                
                            
                                <table id="goaldetail-table" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Car1</td>
                                            <td>$20000</td>
                                            <td style="padding:0px 2%;">
                                                <div id="goalProgress">
                                                    <div id="myBar"><span>50%</span></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#goal-edit-modal" rel="modal:open">Edit</a>
                                            </td>
                                            <td>
                                                <a href="#goal-remove-modal" rel="modal:open" style="color:#ce840f !important;">Remove</a>
                                                <div id="goal-remove-modal" class="modal">
                                                    <div class="row">
                                                        <div class="title">                                            
                                                            <p>Are you sure this goal?</p>
                                                        </div> 
                                                        <div class="modalbtn">
                                                            <div class="col s6 m6 l6" style="padding:0px;text-align:right !important;">
                                                                <a type="submit" class="btn btn-primary btn-lg close-modal-color" rel="modal:close">Close</a>
                                                            </div>
                                                            <div class="col s6 m6 l6" style="padding:0px;">
                                                                <a type="submit" class="btn btn-primary btn-lg" rel="modal:close">Yes</a>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <td>Car</td>
                                            <td>$20000</td>
                                            <td>progress</td>
                                            <td>edit</td>
                                        </tr>
                                    </tfoot> -->
                                </table> 

                                <div id="goal-edit-modal" class="modal">
                                    <div class="row">
                                        <div class="title">                                            
                                            <input type="text" placeholder="Title">
                                        </div>
                                        <div class="amount">                                            
                                            <input type="text" placeholder="Amount">
                                        </div>
                                        <div class="modalbtn">
                                            <div class="col s6 m6 l6" style="padding:0px;">
                                                <a type="submit" class="btn btn-primary btn-lg" rel="modal:close">Submit</a>
                                            </div>
                                            <div class="col s6 m6 l6" style="padding:0px;text-align:right !important;">
                                                <a type="submit" class="btn btn-primary btn-lg close-modal-color" rel="modal:close">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>        
                                    $('#goaldetail-table').dataTable({
                                        searching: false, lengthMenu:[10,20,30],lengthChange: true, paging: true, info: true,
                                    });                                    
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </section>  
        </div>
    </div>
</div>
</main><!--@Page Content-->
</div><!--@#app-->
<?php require('.//footer.php'); ?>