<?php //var_dump((new commande)::PlusDetailsCommande($_GET['idcommande'], 104))  
?>
<div class="container bootdey">
    <div class="row invoice row-printable">
        <div class="col-md-10">
            <!-- col-lg-12 start here -->
            <div class="panel panel-default plain" id="dash_0">
                <!-- Start .panel -->
                <div class="panel-body p30">
                    <div class="row">
                        <!-- Start .row -->
                        <div class="col-lg-6">
                            <!-- col-lg-6 start here -->
                            <div class="invoice-logo"><img width="100" src="https://www.bootdey.com/img/Content/icons/32/PNG/32/bill.png" alt="Invoice logo"></div>
                        </div>
                        <!-- col-lg-6 end here -->
                        <div class="col-lg-6">
                            <!-- col-lg-6 start here -->
                            <div class="invoice-from">
                                <ul class="list-unstyled text-right">
                                    <li>facture d'achat <?= (new commande)::PlusDetailsCommande($_GET['idcommande'], 104)[0]['codecommande'] ?></li>
                                    <li>facture d'achat Date:<?= (new commande)::PlusDetailsCommande($_GET['idcommande'], 104)[0]['datecommande'] ?></li>
                                    <li>Status :0</li>
                                    <li>Moyen de paiement:paypal</li>
                                </ul>
                            </div>
                        </div>
                        <!-- col-lg-6 end here -->
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->

                            <div class="invoice-items">
                                <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="per15 text-center">ref Article </th>
                                                <th class="per55 text-center">Description</th>
                                                <th class="per5 text-center">Qty</th>
                                                <th class="per25 text-center">Prix unitaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ((new commande)::PlusDetailsCommande($_GET['idcommande'], 104) as $datas) : ?>
                                                <tr>
                                                    <td><?= $datas['refarticle'] ?></td>
                                                    <td><?= (new article)::infoarticle($datas['refarticle'])[0]->libellearticle ?></td>
                                                    <td class="text-center"><?= $datas['quantitearticle'] ?></td>
                                                    <td class="text-center"><?= $datas['prixarticle'] ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                            <tr>
                                                <th colspan="3" class="text-right">Total:</th>
                                                <th class="text-center"><?= (new lignecommande)::PrixTotaleParcommande($_GET['idcommande'], 104) . ' FRCFA' ?></th>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="invoice-footer mt25">
                                <p class="text-center">Imprimer le reçu <a href="#" class="btn btn-default ml15"><i class="fa fa-print mr5"></i> Print</a></p>
                            </div>
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                    <!-- End .row -->
                </div>
            </div>
            <!-- End .panel -->
        </div>
        <!-- col-lg-12 end here -->
    </div>
</div>