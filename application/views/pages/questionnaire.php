<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>

<div class="card mt-3">
    <div class="card-header bg-primary text-white font-weight-bolder bg-success"><p class="text-uppercase">Anket 1</p>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">First item</li>
            <li class="list-group-item">Second item</li>
            <li class="list-group-item">Third item</li>
        </ul>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <button type="button" class="btn btn-primary">Çöz</button>
        <button type="button" class="btn btn-secondary">Rapor</button>
    </div>
</div>
<div class="container mt-5">
    <div class="col mt-4">
        <div class="form-group col-4">
            <input type="text" class="form-control" placeholder="Untitled Questionnaire" id="pollName">
        </div>
        <div class="row mt-4">
            <button type="button" class="btn btn-primary col-4" id="addQuestion">Add Question</button>
            <button type="button" class="btn btn-primary col-4" id="saveQuestion">Save</button>
        </div>


    </div>
    <div class="d-flex flex-column" id="polls">

    </div>
</div

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var $addQuestion = $('#addQuestion');
        var $polls = $('#polls');
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
            var pollName = $('#pollName').val();
            var pollType = $('#pollType').val();
            pollItem(pollName, pollType, window.id);
        })

        // ANKET EKLEME
        function pollItem(pollName, pollType, id) {

            var poll = $(`<div class="card mt-3" id="soru-${id}">
                            <div class="card-header">${pollName}</div>
                            <div class="card-body">
                                ${pollType}
                                <ul class="list-group">

                                </ul>
                            </div>
                            <div class="card-footer d-flex justify-content-between row">
                                <input type="text" class="form-control question" placeholder="Soru">
                                <button type="button" class="btn btn-primary add-question">Soru Ekle</button>
                            </div>
                        </div>`);

            // SORU EKLEME
            poll.find('.add-question').on('click', function () {
                var quesitionItem = $('<li class="list-group-item"><span class="quesiton-name"></span></li>').addClass('bg-success mt-2');
                var question = poll.find('.question').val();
                quesitionItem.find('.quesiton-name').text(question);
                poll.find('.list-group').append(quesitionItem);
            })

            $polls.append(poll);
            window.id += 1;
        }

    });


</script>

<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>

