var a = {
    fname : 'Mausomi',
    lname :'Paul',
    Age: 23,
    Country: "India",
    fruits : ["Apple", "Mango", "Kiwi"],
    Places:{
        city: "Dibrugarh", 
        Country : "India",
        Cities : ["Tihu", "Duliajan", "XYZ"],

    },
    salary: function(){ //Method
        return 25000;
    },
    fullname: function(){ //Method
        return this.fname + " " + this.lname;
    }
}

console.log(a);
console.log(a.fruits[0]);
console.log(a.salary());
console.log(a.fullname());
console.log(a.Places.Cities[1]);