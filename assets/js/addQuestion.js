
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
    console.log("You can enter max 8 option");
}

    $options.append(option);
    window.id += 1;
})

    function optionItem(id) {



}

});

