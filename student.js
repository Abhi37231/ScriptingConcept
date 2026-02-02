class Student {
    constructor(name, age, grade) {
        this.name = name;
        this.age = age;
        this.grade = grade;
    }

    displayInfo() {
        console.log(`Name: ${this.name}, Age: ${this.age}, Grade: ${this.grade}`);
    }
}

const student1 = new Student("Abhinandan", 20, "A");
const student2 = new Student("Bob", 22, "B+");
const student3 = new Student("Charlie", 19, "A-");

student1.displayInfo();
student2.displayInfo();
student3.displayInfo();