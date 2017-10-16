<?php
    class Chats {

        //PROPERTIES
        var $chatsId;
        var $text;
        var $textTime;
        var $user1Id;
        var $user2Id;

        //CONSTRUCT
        function __construct($chatsId, $text, $textTime, $user1Id, $user2Id) {
            $this->chatsId = $chatsId;
            $this->text = $text;
            $this->textTime = $textTime;
            $this->user1Id = $user1Id;
            $this->user2Id = $user2Id;
        }

        //GETTERS
        function getChatsId() {return $this->chatsId;}
        function getText() {return $this->text;}
        function getTextTime() {return $this->textTime;}
        function getUser1Id() {return $this->getUser1Id;}
        function getUser2Id() {return $this->user2Id;}

        //SETTERS
        function setChatsId($chatsId) {$this->chatsId = $chatsId;}
        function setText($text) {$this->text = $text;}
        function setTextTime($textTime) {$this->autonomuousComunityId = $autonomuousComunityId;}
        function setUser1Id($user1Id) {$this->user1Id = $user1Id;}
        function setUser2Id($user2Id) {$this->user2Id = $user2Id;}
    }
?>

