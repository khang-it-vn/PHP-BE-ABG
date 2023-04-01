<main class="page">
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
                                        scope="col">ID</th>
                                    <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-18drrcl"
                                        scope="col">Title</th>
                                    <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-18drrcl"
                                        scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="MuiTableBody-root css-ceeiht">
                                <?php foreach ($viewModel["docs"] as $element) :?>
                                <tr class="MuiTableRow-root MuiTableRow-hover css-lfnorv">
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-2x20pz">
                                        <div class="MuiBox-root css-j7qwjs">
                                            <p class="MuiTypography-root MuiTypography-body1 css-1muldh">
                                                <?php echo $element["id_doc"] ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-11u1jp0">
                                        <?php echo $element["title"] ?>
                                    </td>
                                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-11u1jp0">
                                        <div
                                            class="MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorError MuiChip-filledError css-ccsiwf">
                                            <span class="MuiChip-label MuiChip-labelMedium css-14vsv3w">Delete</span>
                                        </div>
                                        <div
                                            class="MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorPrimary MuiChip-filledPrimary css-lvr0df">
                                            <span class="MuiChip-label MuiChip-labelMedium css-14vsv3w">Modified</span>

                                        </div>
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
    <div class="center">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <?php for($i=0; $i<$viewModel["pages"]; $i++) :?>
                <a href="#"><?php echo $i ?></a>
            <?php endfor;?>
            <a href="#">&raquo;</a>
        </div>
    </div>

    <style>
    .center {
        text-align: center;
    }

    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }
    </style>
</main>