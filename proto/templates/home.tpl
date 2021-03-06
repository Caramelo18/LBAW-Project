{include file='common/header.tpl'}

<section class="central">
    <div class="container">
        <div class="row">
            <article class="col-lg-9 article-text">
                <div class="row container-category-title">
                    <h3 class="col-md-12">Highlighted <span class="glyphicon glyphicon-menu-down"></span></h3>
                </div>
                {$article = $dailyTopArticle[0]}
                {include file='common/article.tpl'}
            </article>

            <div class="col-lg-3">
                <div class="row container-category-title">
                    <h3 class="col-xs-12">Recommended <span class="glyphicon glyphicon-menu-down"></span></h3>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Lorem ipsum</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">3 days ago</small>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Lorem ipsum</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">3 days ago</small>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Lorem ipsum</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">3 days ago</small>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Lorem ipsum</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">3 days ago</small>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Lorem ipsum</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">3 days ago</small>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Lorem ipsum</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">3 days ago</small>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row container-category-title">
            <h3 class="col-md-12">Top Articles <span class="glyphicon glyphicon-menu-down"></span></h3>
        </div>
        {$firstArticles = array_slice($dailyTopArticle, 1, 3)}
        {$lastArticles = array_slice($dailyTopArticle, 4, 3)}
        <div class="row">
            {foreach $firstArticles as $article}
                <article class="col-md-4 article-text">
                    {include file='common/article.tpl'}
                </article>
            {/foreach}
        </div>

        <div class="row">
            {foreach $lastArticles as $article}
                <article class="col-md-4 article-text">
                    {include file='common/article.tpl'}
                </article>
            {/foreach}
        </div>
    </div>

    {foreach from=$articles key=category item=value}
        {$firstArticles = array_slice($value, 0, 3)}
        {$lastArticles = array_slice($value, 3, 3)}

        <div class="container">
            <div class="row container-category-title">
                <h3 class="col-md-12">{$category} <span class="glyphicon glyphicon-menu-down"></span></h3>
            </div>
            <div class="row">
                {foreach $firstArticles as $article}
                    <article class="col-md-4 article-text">
                        {include file='common/article.tpl'}
                    </article>
                {/foreach}
            </div>

            <div class="row">
                {foreach $lastArticles as $article}
                    <article class="col-md-4 article-text">
                        {include file='common/article.tpl'}
                    </article>
                {/foreach}
            </div>
        </div>

    {/foreach}

</section>

{include file='common/footer.tpl'}
