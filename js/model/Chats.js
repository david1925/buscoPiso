function Chats() {
    this.chatsId;
    this.text;
    this.textTime;
    this.user1Id;
    this.user2Id;
    
    this.construct = function (chatsId, text, textTime, user1Id, user2Id) {
        this.setChats(chatsId);
        this.setText(text);
        this.setTextTime(textTime);
        this.setUser1Id(user1Id);
        this.setUser2Id(setUser2Id);
    }

    this.getChats = function () {return this.chatsId;}
    this.getText = function () {return this.text;}
    this.getTextTime = function () {return this.textTime;}
    this.getUser1Id = function () {return this.user1Id;}
    this.getUser2Id = function () {return this.user2Id;}

    this.setChats = function (chatsId) {this.chatsId=chatsId;}
    this.setText = function (text) {this.text=text;}
    this.setText = function (textTime) {this.textTime=textTime;}
    this.setUser1Id = function (user1Id) {this.user1Id=user1Id;}
    this.setUser2Id = function (user2Id) {this.user2Id=user2Id;}
}