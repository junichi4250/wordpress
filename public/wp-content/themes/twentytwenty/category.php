<?php get_header(); ?>
<!-- 記事ページ -->
<main>
    <section class="p-works">
        <div class="works">
            <div>
                <?php single_cat_title() ?>
            </div>
            <ul class="works-item">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $the_query = new WP_Query( array(
                    'post_status' => 'publish',
                    'post_type' => 'post', //　ページの種類（例、page、post、カスタム投稿タイプ名）
                    'paged' => $paged,
                    'posts_per_page' => 3, // 表示件数
                    'orderby'     => 'date',
                    'order' => 'DESC'
                    ) );
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                <?php
                    echo the_time('Y.m.d')
                ?>
                <?php the_category(); ?>
                <?php
                endwhile;
                else:
                    echo '<div><p>ありません。</p></div>';
                endif;
                ?>
            </ul>
        </div>
        <div class="pnavi">
            <?php //ページリスト表示処理
                global $wp_rewrite;
                $paginate_base = get_pagenum_link(1);
                if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged','%#%');
                }else{
                    $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                    user_trailingslashit('page/%#%/','paged');
                    $paginate_base .= '%_%';
                }
                echo paginate_links(array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'total' => $the_query->max_num_pages,
                    'mid_size' => 1,
                    'current' => ($paged ? $paged : 1),
                    'prev_text' => '< 前へ',
                    'next_text' => '次へ >',
                ));
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
