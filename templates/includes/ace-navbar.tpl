<div class="navbar navbar-default" id="navbar">    <script type="text/javascript">        try {            ace.settings.check('navbar', 'fixed')        } catch (e) {        }    </script>    <div class="navbar-container" id="navbar-container">        <div class="navbar-header pull-left">            <a href="#" class="navbar-brand">                <small>                    <i class="icon-leaf"></i>                    Lamps administrace                </small>            </a><!-- /.brand -->        </div>        <!-- /.navbar-header -->        <div class="navbar-header pull-right" role="navigation">            <ul class="nav ace-nav">                <li class="grey">                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">                        {if isset($smarty.session.lang)}                        <img width="25px" src="{$setup.adm.www}assets/img/countryflags/{$smarty.session.lang}.png" alt="{t}TRANSLATE{/t}" />                        {else}                            <img width="25px" src="{$setup.adm.www}assets/img/countryflags/en_US.png" alt="{t}TRANSLATE{/t}" />                        {/if}                        <i class="icon-caret-down"></i>                    </a>                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">                        <li>                        {foreach $langList as $it}                            <img width="25px" onclick="window.location = window.location.origin+window.location.pathname+'?lang={$it}'" src="{$setup.adm.www}assets/img/countryflags/{$it}.png" alt="{t}TRANSLATE{/t}" />                        {/foreach}                        </li>                    </ul>                </li>                <li class="light-blue">                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">                        <img class="nav-user-photo" src="{$setup.adm.www}assets/avatars/avatar2.png" alt="Avatar" />                        <span class="user-info">                            <small>Vítejte,</small>                            {$smarty.session.user.nick}                        </span>                        <i class="icon-caret-down"></i>                    </a>                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">                        <li>                            <a href="{$setup.adm.www}profil/nastaveni.html">                                <i class="icon-user"></i>                                Profil                            </a>                        </li>                        <li class="divider"></li>                        <li>                            <a href="{$setup.adm.www}?odhlasit=1">                                <i class="icon-off"></i>                                Odhlásit                            </a>                        </li>                    </ul>                </li>            </ul><!-- /.ace-nav -->        </div><!-- /.navbar-header -->    </div><!-- /.container --></div>