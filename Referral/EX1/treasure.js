function checkWin($element, $treasureItem)
{
    //var treasure = "middle-right"; hard coded treasure variable
    var winner = false;
    
    if ($element.attr("id") === $treasureItem)
    {   
        winner = true;
    }
    return winner;
};
function setRandom()
{
var treasure = ["top-left", "top-middle", "top-right", "middle-left", "middle-middle", "middle-right", "bottom-left", "botton-middle", "bottom-right"]; 
var randomiser = Math.floor(Math.random() *8);//returns random integer from 1 to 9
//alert ("Value set is "+ randomiser + " : "+ treasure[randomiser]);// tells us random function works!

return treasure[randomiser];
}
function chat($websocket)
{
    $websocket.send($.trim($("#chatInput").val()));
    alert ('have sent chat');
    
    $websocket.onerror = function(error)
    {
    alert('websocket error: ' + error);
    }
}
$(document).ready(function(){
        var webSocketURI = "ws://echo.websocket.org";
        var webSocket = new WebSocket(webSocketURI);
        
        $('#chatSubmit').click(function(){
   
        chat(webSocket);
            
        }
        );

        webSocket.onmessage = function (evt)
        {
            var received = evt.data;
            $("<br><span style='color:blue;'>Reply:  " +received+ "</span>").appendTo("#chatOutput");
            
        }
        $('#chatClose').click(function(){
            webSocket.close();
            $("<br><span style='color:red;'>Closing.. bye bye</span>").appendTo("#chatOutput");
        })
        
        
        var treasureItem = setRandom();
    
    $("td").click(function(){
        if (checkWin($(this), treasureItem))
        {
           $(this).removeClass("bg-light").addClass("bg-success");
           alert("Well Done!");
        }
        else
        {
            $(this).removeClass("bg-light").addClass("bg-danger");
        }
    });
});









/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


