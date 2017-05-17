<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/typed.js') }}"></script>
<script>
    $(function(){

        $("#typed").typed({
            strings: ["-Целый год между нами происходило что-то вроде интеллектуальной близости.^1000"],
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            // defaults to false for infinite loop
            loopCount: 1,
            callback: function(){ 
            $("#author").typed({
            strings: ["Сергей Довлатов"],
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            // defaults to false for infinite loop
            loopCount: 1,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#author").typed('reset');
        });
            
            },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    