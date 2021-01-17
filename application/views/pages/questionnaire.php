<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>

<div class="card mt-3">
    <div class="card-header bg-primary text-white font-weight-bolder bg-success"><p class="text-uppercase">Anket 1</p>
    </div>

</div>
<div class="container mt-5">
    <div class="d-flex">
        <div class="form-group col-12">
            <div class="form-group col-4">
                <input type="text" class="form-control" placeholder="Untitled Questionnaire" id="qnName">
            </div>
            <div class="form-group col-4">
                <input type="text" class="form-control" placeholder="Description" id="description">
            </div>
            <div class="form-group col-4">
                <input type="text" class="form-control" placeholder="Type" id="qnType">
            </div>
        </div>



    </div>

    <div class="d-flex flex-column" id="questions">

    </div>
    <div class="col mt-4 justify-content-between">
        <button type="button" class="btn btn-primary col-4" id="addQuestion">Add Question</button>
        <button type="button" class="btn btn-primary col-4" id="saveQuestion">Save</button>
    </div>
</div

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var $addQuestion = $('#addQuestion');
        var $questions = $('#questions');
        var $savePool = $('#savePool');

        window.id = 1;

        $savePool.click(function () {
            var data = {};
            var questions = $('#polls .card .card-header').get().map(function (val) {
                data[$(val).closest('.card').attr('id')] = val;
            })

            console.log(questions);
        });

        $addQuestion.on('click', function () {
            var qnType = $('#qnType').val();
            questionItem(qnType, window.id);
        })

        // ANKET EKLEME
        function questionItem(qnType, id) {
            var poll;
            if (qnType === "Multiple Choice") {
                poll = $(`<div class="card mt-3" id="soru-${id}">
                            <div class="card-header">
                    <input type="text" style="font-size:25px;" class="form-control" placeholder="Question" id="question">
                       <ul class="list-group mt-2">
                            <li class="list-group-item">
                                <div contentEditable="true">
                                    <span contentEditable="false">
                                      <input type="radio"/>
                                    </span>Option 1
                                </div>
                            </li>
                      </ul>
                            <div class="card-footer d-flex justify-content-between row mt-2">
                                <input type="text" class="form-control question" placeholder="Option">
                                <button type="button" class="btn btn-primary add-option mt-2">Add Option</button>
                            </div>
                        </div>`);
            } else {
                poll = $(`<div class="card mt-3" id="soru-${id}">
                            <div class="card-header">
                    <input type="text" style="font-size:25px;" class="form-control" placeholder="Question" id="question">
                       <ul class="list-group mt-2">
                             <div class="card-footer d-flex justify-content-between row mt-2">
                                <input type="text" class="form-text" placeholder="Answer">
                            </div>
                      </ul>

                        </div>`);
            }

            // SORU EKLEME
            poll.find('.add-option').on('click', function () {
                var quesitionItem = $('<li class="list-group-item"> <div contentEditable="true"> <span contentEditable="false"> <input type="radio"/> </span>Option 1 </div> </li>').addClass('mt-2');
                var question = poll.find('.question').val();
                quesitionItem.find('.quesiton-name').text(question);
                poll.find('.list-group').append(quesitionItem);
            })

            $questions.append(poll);
            window.id += 1;
        }

    });


</script>

<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>

