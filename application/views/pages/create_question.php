<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>
<div class="container">
    <h1 class="text-center display-3"><?php echo $qnName?></h1>
    <h4 class="text-center">Your questionnaires link will be:<br><a href="<?php echo base_url().'fill/'.$qnId?>"><?php echo base_url().'fill/'.$qnId?></a></h4>
    <div class="d-flex">
        <div class="form-group col-12 jumbotron">
            <form method="post" action="<?php echo base_url()?>import-question">
                <div class="form-group" style="display: none">
                    <input type="text" class="form-control" placeholder="Enter Question" id="qnId" name="qnId" value="<?php echo $qnId?>">
                </div>
                <div class="form-group">
                    <label for="qnName">Question: </label>
                    <input type="text" class="form-control" placeholder="Enter Question" id="questionName" name="questionName">
                </div>
                <div class="form-group">
                    <label for="description">Question description: </label>
                    <input type="text" class="form-control" placeholder="Specify your question(optional)" id="questionDescription" name="questionDescription">
                </div>
                <div id="options">
                    <div class="form-group">
                        <label for="description">Option 1: </label>
                        <input type="text" class="form-control" placeholder="Enter a answer" id="option1" name="option1">
                    </div>
                </div>
                <div class="form-group float-right">
                    <button type="submit" name="action" class="btn btn-primary" id="nextQuestion" value="add">Next Question</button>
                </div>
                <div class="form-group float-right">
                    <button type="submit" name="action" class="btn btn-danger mx-2" id="finish" value="save">Save Questionnaire</button>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary mx-2" id="addOption">Add Option</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Adding option script-->
<script>
    $(document).ready(function (){
        var $addOption = $('#addOption');
        var $options = $('#options');
        window.id = 2;
        $addOption.on('click', function () {
            var option;
            if (window.id<= 8) {
                option = $(`<div class="form-group">
                        <label for="description">Option ${id}:</label>
                        <input type="text" class="form-control" placeholder="Enter a answer" id="option${id}" name="option${id}">
                    </div>`);
            }
            else{
                alert("You can enter max 8 option");
            }
            $options.append(option);
            window.id += 1;
        })
        function optionItem(id) {
        }
    });
</script>
<!--end script-->
<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>

