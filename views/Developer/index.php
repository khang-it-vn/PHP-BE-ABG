<main class="page">
    <h1 class="text-center"> <?php echo $viewModel['content']['title']?></h1>
    <div class="mt-2" style="margin: 89px 40px 0 20px">
        <?php echo $viewModel['content']['description']?>
    </div>
    <footer class="page-edit">
        <div class="last-updated">
            <span class="prefix">Lần update gần đây nhất:</span> <span class="time">3/3/2023,
                12:51:51 PM
            </span>
        </div>
    </footer>
    <div class="page-nav">
        <p class="inner">
            <span class="prev">
                <a href="?id=<?php echo $viewModel['content']['id_doc'] > 1 ? $viewModel['content']['id_doc'] - 1: 1  ?>"
                    class="prev">
                    Trang trước
                </a>
            </span> 
            <span class="next">
                <a href="?id=<?php echo ++$viewModel['content']['id_doc']  ?>">
                    Trang kế
                </a>
            </span>
        </p>
    </div>

</main>