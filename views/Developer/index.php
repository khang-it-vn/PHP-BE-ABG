<main class="page">
    <div class="mt-2" style="margin: 89px 40px 0 20px">
        <?php echo $viewModel['content']['description']?>
    </div>
    <footer class="page-edit">
        <div class="last-updated">
            <span class="prefix">Last Updated:</span> <span class="time">3/2/2023,
                12:51:51 PM
            </span>
        </div>
    </footer>
    <div class="page-nav">
        <p class="inner">
            <span class="prev">
                <a href="?id=<?php echo $viewModel['content']['id_doc'] > 1 ? $viewModel['content']['id_doc'] - 1: 1  ?>"
                    class="prev">
                    Installation
                </a>
            </span> 
            <span class="next">
                <a href="?id=<?php echo ++$viewModel['content']['id_doc']  ?>">
                    GitHub Access
                </a>
            </span>
        </p>
    </div>

</main>