<?php


/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <form id="filter_form" class="clearfix" action="/candidate/project" method="post">
            <input type="hidden" name="_csrf" value="WDBvR01HQnMJBioINAgWOC1ZAAggdxMaCVgVA3hyFRANRwcweRMRFQ==">
            <div class="form-group field-projectfilterform-status">

                <div>
                    <div id="projects_status" class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default"><input type="radio" class="project-status-btn" name="ProjectFilterForm[status]" value="all">All</label>
                        <label class="btn btn-default active"><input type="radio" class="project-status-btn" name="ProjectFilterForm[status]" value="active" checked="">Active</label>
                        <label class="btn btn-default"><input type="radio" class="project-status-btn" name="ProjectFilterForm[status]" value="preview">Preview</label>
                        <label class="btn btn-default"><input type="radio" class="project-status-btn" name="ProjectFilterForm[status]" value="finished">Finished</label>
                        <label class="btn btn-default"><input type="radio" class="project-status-btn" name="ProjectFilterForm[status]" value="deleted">Deleted</label>
                    </div>
                    <p class="help-block help-block-error"></p>
                </div>

            </div>
        </form>


    </div>
</div>
