<?php require('./header.php');
        require('./sidebar.php');
 ?>  
<div id="main">
<!--Page Content-->
<main id="pageContent" class="page has-sidebar">
    <div class="container-fluid relative animatedParent animateOnce" style="padding-top:100px !important;">
        <div class="animated fadeInUpShort p-md-5 p-3">
            <section class="section">
                <div class="card-content quote sidebar-support">
                    <p>Support</p>
                    <table id="sidebar-support-table" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Ticket</th>
                            <th>Date</th>
                            <th>Reply</th>
                            <th>Status</th>
                            <th>Conversation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ticket</td>
                            <td>Date</td>
                            <td>Reply</td>
                            <tD>Status</td>
                            <td>Conversation</td>
                        </tr>
                        <tr>
                            <td>Ticket</td>
                            <td>Date</td>
                            <td>Reply</td>
                            <tD>Status</td>
                            <td>Conversation</td>
                        </tr>
                        <tr>
                            <td>Ticket</td>
                            <td>Date</td>
                            <td>Reply</td>
                            <tD>Status</td>
                            <td>Conversation</td>
                        </tr>
                        <tr>
                            <td>Ticket</td>
                            <td>Date</td>
                            <td>Reply</td>
                            <tD>Status</td>
                            <td>Conversation</td>
                        </tr>
                        <tr>
                            <td>Ticket</td>
                            <td>Date</td>
                            <td>Reply</td>
                            <tD>Status</td>
                            <td>Conversation</td>
                        </tr>
                        <tr>
                            <td>Ticket</td>
                            <td>Date</td>
                            <td>Reply</td>
                            <tD>Status</td>
                            <td>Conversation</td>
                        </tr>
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                            </tr>
                        </tfoot> -->
                    </table>
                </div>
            </section>
            <script>
                $('#sidebar-support-table').dataTable({
                    searching: false, lengthMenu:[5],lengthChange: false, paging: true, info: true,
                });
            </script>
        </div>
    </div>
</div>
</main><!--@Page Content-->
</div><!--@#app-->
<?php require('.//footer.php'); ?>