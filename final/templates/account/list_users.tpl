{include file='../common/header.tpl'}


<section class="central">
    <div class="container">
        <div class="row account">
            <div class="col-md-3">
                {include file='account/accountOverview.tpl'}
            </div>
            <div class="col-md-6">
                <div class="account-content account-overview">

                    {foreach $users as $user}
                        <div class="row">
                            <article class="col-xs-12 article-text">
                                <div class="panel panel-default">
                                    <div class="panel-body article-text">
                                        <div class="profile-header-container">
                                            <form method="get" action="../profile.php" class="row">
                                                <input type="hidden" name="id" value={$user.id}>
                                                <div type="submit">
                                                    <div class="col-xs-10">
                                                        <div class="profile-header-img">
                                                            <img class="img-circle" src="{$BASE_URL}upload/user_profile/demo-user.png" />
                                                        </div>
                                                        <div class="article-publisher">
                                                            <a href="{$BASE_URL}pages/profile.php">
                                                                <h4 class="article-author">{$user.name}</h4>
                                                                <small>Rating: {$user.rating}</small>
                                                                <small>Permission: {$user.permission}</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-2 small-text">
                                                        <div class="dropdown horizontal-menu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-option-horizontal pull-right"></span></a>

                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                {if $user.permission == "Publisher"}
                                                                    <li><a href="#"><span class="fa fa-arrow-circle-o-up" aria-hidden="true"></span> &nbsp;Promote to Moderator</a></li>
                                                                {elseif $user.permission == "Moderator"}
                                                                    <li><a href="#"><span class="fa fa-arrow-circle-o-up" aria-hidden="true"></span> &nbsp;Promote to Administrator</a></li>
                                                                    <li><a href="#"><span class="fa fa-arrow-circle-o-down" aria-hidden="true"></span> &nbsp;Demote to Publisher</a></li>
                                                                {else}
                                                                    <li><a href="#"><span class="fa fa-arrow-circle-o-down" aria-hidden="true"></span> &nbsp;Demote to Moderator</a></li>
                                                                {/if}
                                                                <li><a href="#"><span class="fa fa-ban" aria-hidden="true"></span> &nbsp;Ban user</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    {/foreach}

                    <div align="center">
                        {if $pageNo > 0}
                            <a href="?pageNo={$pageNo-1}"><span class="glyphicon glyphicon-chevron-left"></span>Previous </a>
                        {/if}
                        {if $limit == $usersLength}
                            <a href="?pageNo={$pageNo+1}">Next <span class="glyphicon glyphicon-chevron-right"></span></a>
                        {/if}
                    </div>
                </div>

            </div>

            <div class="account-recommended col-md-3">
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
                </div>
            </div>
        </div>
    </div>
</section>

{include file='../common/footer.tpl'}