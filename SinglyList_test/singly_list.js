class Node{
    constructor(val){
        this.val = val;
        this.next = null;
    }
}
 class SinglyList{
        constructor(){
            this.head = null;
            this.tail = null;
            this.length = 0;
        }
        push(val){
            let newNode = new Node(val);
            if(!this.head){
                this.head = newNode;
                this.tail = this.head;
            } else {
                this.tail.next = newNode;
                this.tail = newNode;
            }
            this.length++;
            return this;
            }
         pop(){
             if(!this.head) return undefined;
             let tete = this.head;
             let newTail = tete;
             while(tete.next){
                 newTail = tete;
                 tete = tete.next;

                 
             }
             this.tail = newTail;
             this.tail.next = null;
             this.length--;
             if(this.length === 0){
                 this.head = null;
                 this.tail = null;
             }
             return tete;
         }   
 }
    
let list = new SinglyList()
list.push("Jeff")
list.push("Isaac")
list.push("Mr Badette")
list.push("hugues")
list.push("Steve")
list.push("Samy")