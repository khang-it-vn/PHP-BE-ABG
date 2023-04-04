<div class="graf">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs md-tabs graf_tab" id="myTabMD" role="tablist">
                    <li>
                        <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#tab1" role="tab"
                            aria-controls="home-md" aria-selected="true">All Cryptos</a>
                    </li>
                    <div class="col-md-10 d-flex align-items-center justify-content-end">
                        <input class="contactus" placeholder="Seach Coin Name" type="type" name="SeachCoinName"
                            style="background-color: transparent; border: 1px solid #404b65; color: #5e687d; padding: 8px 12px; border-radius: 15px;">

                        <li class="d_none">
                            <a href="Javascript:void(0)">
                                <i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i>
                            </a>
                        </li>
                    </div>


                </ul>
                <div class="tab-content card  graf_content" id="myTabContentMD">
                    <div class="tab-pane fade show active padi" id="tab1" role="tabpanel" aria-labelledby="home-tab-md"
                        style="text-align: center;">
                        <table style="table-layout: fixed; width: 100%;">
                            <colgroup>
                                <col style="width: 10%;">
                                <col style="width: 10%;">
                                <col style="width: 10%;">
                                <col style="width: 10%;">
                                <col style="width: 10%;">
                                <col style="width: 10%;">
                            </colgroup>
                            <thead>
                                
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th><label for="">1h</label> <label for="">4h</label> <label for=""
                                            id="c24">24h</label>
                                        Change
                                        <style>
                                        #c24 {
                                            color: yellow;
                                        }

                                        label:hover {
                                            color: yellow;
                                        }
                                        </style>
                                    </th>

                                    <th>Last Price</th>
                                    <th>24h Volume</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach ($viewModel as $item):?>
                                <tr>
                                    <td><?php echo $item->symbol?></td>
                                    <td><?php echo $item->prevClosePrice?></td>
                                    <td><?php echo $item->priceChangePercent?></td>
                                    <td><?php echo $item->lastPrice?></td>
                                    <td><?php echo $item->volume?></td>

                                    <td><a href="#" onclick="goToPage('a')">Detail</a>
                                        <a href="#" onclick="goToPage('b')">Trade</a>
                                        <style>
                                        td a {
                                            color: rgb(255, 144, 8);
                                            text-decoration: none;
                                        }
                                        </style>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end graf -->
<!-- testimonial -->
<div class="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
<div class="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
<script>
  setInterval(function(){
    location.reload();
  }, 700000);

</script>