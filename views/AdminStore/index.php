<main class="layout-page-content css-zyg32b">
    <div class="css-zo3z3e">
        <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-6 css-h2qpui">
            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                <div
                    class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
                    <div class="MuiTableContainer-root css-939q39">
                        <table class="MuiTable-root css-10y3fr9" aria-label="table in dashboard">
                            <thead class="MuiTableHead-root css-ucz4w7">
                                <tr class="MuiTableRow-root MuiTableRow-head css-1a1fzdj">
                                    <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-18drrcl"
                                        scope="col">Name</th>
                                    <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-18drrcl"
                                        scope="col">Image</th>
                                    <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-18drrcl"
                                        scope="col">Description</th>
                                    <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-18drrcl"
                                        scope="col">Price</th>
                                    <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-18drrcl"
                                        scope="col">Product Type</th>
                                    <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-18drrcl"
                                        scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="MuiTableBody-root css-ceeiht">

                                <?php
                                    // Get current page number from query string
                                    $page = isset($_GET['page']) ? $_GET['page'] : 1;

                                    // Get total number of products
                                    $totalProducts = count($viewModel['ListProduct']);

                                    // Calculate total number of pages
                                    $perPage = 10;
                                    $totalPages = ceil($totalProducts / $perPage);

                                    // Calculate offset for SQL query
                                    $offset = ($page - 1) * $perPage;

                                    // Retrieve products for current page
                                    // Replace with actual code that retrieves product data from the database
                                    // and limits the number of rows per page using the LIMIT and OFFSET clauses
                                    $products = array(); // replace with actual array of products

                                    foreach ($viewModel['ListProduct'] as $item):?>
                                <tr class="MuiTableRow-root MuiTableRow-hover css-lfnorv">
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-2x20pz">
                                        <div class="MuiBox-root css-j7qwjs">
                                            <p class="MuiTypography-root MuiTypography-body1 css-1muldh">
                                                <?php echo $item['nameproduct']; ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-11u1jp0">
                                        <img style="weight: 50px; height:50px"
                                            src="http://localhost:3000/img/<?php echo $item['image']; ?>" alt="">
                                    </td>
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-11u1jp0">
                                        <?php echo $item['description']; ?>
                                    </td>
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-11u1jp0">
                                        <?php echo $item['price']; ?>
                                    </td>
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-11u1jp0">
                                        <?php echo $item['name']; ?>
                                    </td>
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-11u1jp0">
                                        <div
                                            class="MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorPrimary MuiChip-filledPrimary css-lvr0df">
                                            <a style="color:white"
                                                class="MuiChip-label MuiChip-labelMedium css-14vsv3w"
                                                href= "<?php echo ROOT_URL.'adminStore/Delete?id='.$item['id_product']?>">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                <!-- display pagination links -->
                                <div>
                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    <?php endfor; ?>
                                </div>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>