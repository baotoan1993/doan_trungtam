<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="public/index.html">{$main_menu}</a></li>
              <li><i class="fa fa-laptop"></i>{$sub_title}</li>
            </ol>
          </div>
        </div>

        <!--{include file="summary.tpl"}-->

        <!--/.row-->


        <!-- Today status end -->



        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>{$content_heading}</strong></h2>
              </div>
              <div class="panel-body">
              	{if (isset($view))}
                {include file="$view"}
                {/if}
              </div>

            </div>
          </div>
        </div>
      </section>
    </section>