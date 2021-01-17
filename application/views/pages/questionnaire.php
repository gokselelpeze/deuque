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
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Untitled Questionnaire" id="qnName">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description" id="description">
`
        </div>
    </div>
</div>

<div class="d-flex flex-column" id="questions">

</div>
<div class="col mt-4 justify-content-between">
    <label for="Type">Question Type</label>
    <select id="qnType" name="qnType" class="custom-select mb-3">
        <option selected value="Multiple Choice">Multiple Choice</option>
        <option value="Paragraph">Paragraph</option>
    </select>
    <button type="button" class="btn btn-primary col-4" id="addQuestion">Add Question</button>
    <button type="button" class="btn btn-primary col-4" id="saveQn">Save</button>
</div>
</div

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var $addQuestion = $('#addQuestion');
        var $questions = $('#questions');
        var $saveQn = $('#saveQn');

        window.id = 1;


        $saveQn.click(function () {
            var data = {};
            var questions = $('#questions .card .card-header').get().map(function (val) {
                data[$(val).closest('.card').attr('id')] = val;
            })

            console.log(questions);
        });

        $addQuestion.on('click', function () {
            var sel = document.getElementById('qnType');
            var qnType = getSelectedOption(sel).value;
            console.log(qnType);
            questionItem(qnType, window.id);
        })

        function getSelectedOption(sel) {
            var opt;
            for (var i = 0, len = sel.options.length; i < len; i++) {
                opt = sel.options[i];
                if (opt.selected === true) {
                    break;
                }
            }
            return opt;
        }

        // ANKET EKLEME
        function questionItem(qnType, id) {
            var question;
            if (qnType === "Multiple Choice") {
                question = $(`<div class="card mt-3" id="q${id}">
                            <div class="card-header">
                    <input type="text" style="font-size:25px;" class="form-control" placeholder="Question" id="question">
                       <ul id="list" class="list-group mt-2">
                            <li class="list-group-item">
                                <div id="optionID" contentEditable="true">
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
                question = $(`<div class="card mt-3" id="q${id}">
                            <div class="card-header">
                    <input type="text" style="font-size:25px;" class="form-control" placeholder="Question" id="question">
                       <ul class="list-group mt-2">
                             <div class="card-footer d-flex justify-content-between row mt-2">
                                <input type="text" class="form-text" placeholder="Answer">
                            </div>
                      </ul>

                        </div>`);
            }

            // ŞIK EKLEME
            question.find('.add-option').on('click', function () {
                var quesitionItem = $('<li class="list-group-item"> <div contentEditable="true"> <span contentEditable="false"> <input type="radio"/> </span>Option 1 </div> </li>').addClass('mt-2');
                question.find('.list-group').append(quesitionItem);
                var lis = document.getElementById("list").getElementsByTagName("li");
                var MyDiv1 = document.getElementById('div').textContent;
                console.log(lis);
                console.log(MyDiv1);
            })

            $questions.append(question);
            window.id += 1;
        }

    });


</script>

<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>

