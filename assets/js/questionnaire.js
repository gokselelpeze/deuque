$(document).ready(function () {
    var $addPoll = $('#addPool');
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

    $addPoll.on('click', function () {
        var pollName = $('#pollName').val();
        var pollType = $('#pollType').val();
        pollItem(pollName, pollType, window.id);
        console.log("sa");
    })


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
