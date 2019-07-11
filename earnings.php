<?php
require('./header.php');


ob_start();

require('vc/includes.php');
$vc = new Users();
$earning_info = $vc->get_earning_info();
$acceptace = $vc->checkFirstLoginStatus();

$quote = $vc->get_quote();
$admin_name = $quote['admin_name'];
$comment = $quote['comment'];

$notice = $vc->get_notice();

require('./sidebar.php');
?>
    <div id="main">

        <!--Page Content-->
        <main id="pageContent" class="page has-sidebar">
            <div class="container-fluid relative animatedParent animateOnce" style="padding-top:100px !important;">
                <div class="animated fadeInUpShort p-md-5 p-3">
                    <section class="section earning-container">
                        <div id="button-trigger" class="card card card-default scrollspy"
                             style="background:transparent;">
                            <div class="card-content">
                                <h1 class="mb-2 text-primary">Earning</h1>
                                <div class="row">
                                    <div class="col s12 goaldetailtable">
                                        <table id="earning-table" class="display" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Week</th>
                                                <th>Amount</th>
                                                <th>Invoice</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            if (count($earning_info) >= 0) {
                                                for ($jj = 0; $jj < count($earning_info); $jj++)
                                                {
                                                    echo '<tr>';
                                                    echo "<td>" . $earning_info[$jj]['date'] . "</td>";
                                                    echo "<td>" . $earning_info[$jj]['total_amount'] . "</td>";
                                                    echo "<td>" . "</td>";
                                                    echo '</tr>';
                                                }
                                            }
                                            ?>

                                            </tbody>
                                        </table>
<!--                                        <div class="emptyearningtable">asdfasdfasdf</div>-->

                                        <script>
                                            $('#earning-table').dataTable({
                                                searching: false,
                                                lengthMenu: [10, 20, 30],
                                                lengthChange: true,
                                                paging: true,
                                                info: true,
                                            });
                                        </script>
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