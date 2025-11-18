import { Component, computed, effect, Signal, signal, WritableSignal } from '@angular/core';
import { Login } from './login/login';
import { Signup } from './signup/signup';
import { FormsModule } from '@angular/forms';
import { RouterLink, RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-root',
  imports: [Login, Signup, FormsModule, RouterLink, RouterOutlet],
  templateUrl: './app.html',
  styleUrl: './app.css',
})
export class App {
  protected readonly title = signal('my-app1');

  // Function---
  handleClickEvent() {
    alert('Function called');
    this.handleClickEvent1();
  }

  handleClickEvent1() {
    console.log('Function called');
  }

  // Define Data type---
  // name: string = 'Ravi';
  // name = 'Ravi';
  // name = 1;
  data: string | number = 'Data type';
  other: any;

  dataType() {
    // console.log(this.name);
    // console.log(this.name = 'Anil');
    // console.log(this.name = 20);

    console.log((this.data = 123));

    console.log((this.other = 10));
  }

  // variables---
  varType() {
    // let x = 30
    let x: number = 30;
    let y: number = 30;

    console.log(x, y);
    this.sum(x, y);
  }
  sum(a: number, b: number) {
    console.log(a + b);
  }

  // Counter App---
  count: number = 0;

  handleIncrement() {
    this.count = this.count + 1;
  }
  handleDecrement() {
    this.count = this.count - 1;
  }
  handleReset() {
    this.count = 0;
  }

  handleCounter(val: string) {
    if (val == 'minus') {
      // this.count = this.count - 1;
      if (this.count > 0) {
        this.count = this.count - 1;
      }
    } else if (val === 'plus') {
      this.count = this.count + 1;
    } else {
      this.count = 0;
    }
  }

  // Event---
  handleEvent() {
    console.log('Click event');
  }
  // handleEventDetails(event:any){
  handleEventDetails(event: MouseEvent) {
    // console.log('function called:', event);
    console.log('function called:', event.type);
    // console.log('function called:', event.target);
    // console.log('function called:', (event.target as Element).className);
  }
  handleInputEventDetails(event: Event) {
    console.log('function called:', event.type);
    console.log('value:', (event.target as HTMLInputElement).value);
  }

  // Get & Set Input field Value---
  name = '';
  getName(event: Event) {
    // console.log(event);
    const name = (event.target as HTMLInputElement).value;
    // console.log(name);
    this.name = name;
  }

  displayName = '';
  showName() {
    this.displayName = this.name;
  }
  setName() {
    this.name = 'Ravi';
  }

  email = '';
  getEmail(val: string) {
    console.log(val);
    this.email = val;
  }
  setEmail() {
    this.email = 'set@email.com';
  }

  // If Else statement---
  x = 20;
  display = true;
  // display = false;

  hide() {
    this.display = false;
  }
  show() {
    this.display = true;
  }
  toggle() {
    this.display = !this.display;
  }
  toggleDiv = true;
  // toggleDiv = false;
  toggleTwo() {
    this.toggleDiv = !this.toggleDiv;
  }

  // Else If statement---
  // color = 1;
  // color = 2;
  // color = 3;
  color = 4;

  handleColor(val: number) {
    this.color = val;
  }
  handleInput(event: Event) {
    this.color = parseInt((event.target as HTMLInputElement).value);
  }

  // Switch Case---
  colors = 'red';
  handleColors(val: string) {
    this.colors = val;
  }
  handleInputColors(event: Event) {
    this.colors = (event.target as HTMLInputElement).value;
  }

  // For Loop---
  users = ['Anil', 'Aman', 'Anish', 'Anshu', 'Vipin'];
  students = [
    { name: 'Anil', age: 20, email: 'anil@this.gmail.com' },
    { name: 'Aman', age: 25, email: 'aman@this.gmail.com' },
    { name: 'Anish', age: 22, email: 'anish@this.gmail.com' },
    { name: 'Anshu', age: 21, email: 'anshu@this.gmail.com' },
    { name: 'Vipin', age: 24, email: 'vipin@this.gmail.com' },
  ];

  getStudentName(name: string) {
    console.log(name);
  }

  // Signals---
  counts = signal(10);
  y = 20;

  // constructor() {
  //   // effect(() => {
  //   //   console.log(this.y);
  //   // });

  //   effect(() => {
  //     console.log(this.counts());
  //   });
  // }
  updateValue() {
    // this.y = this.y + 1;
    this.counts.set(this.counts() + 1);
  }

  // Signals Data type---
  // signalData = signal<number | string>(10);
  // signalData: WritableSignal<number | string> = signal(10);
  signalData: WritableSignal<number> = signal(10);
  count1: Signal<number> = computed(() => 20); //not update data

  updateSignal() {
    // this.signalData.set('Hello');
    this.signalData.update((val) => val + 1); // use for single data update like: number OR string/
  }

  // Computed Signals---
  // x1 = 10;
  // y1 = 20;
  // z = this.x1 + this.y1;

  // showValue() {
  //   console.log(this.z);
  //   this.x1 = 100;
  //   this.z = this.x1 + this.y1;
  //   console.log(this.z);
  // }

  x1 = signal(10);
  y1 = signal(20);
  z = computed(() => this.x1() + this.y1());

  showValue() {
    console.log(this.z());
    // this.x1.set(100);
    // console.log(this.z());
  }
  updateX1() {
    this.x1.set(100);
    console.log(this.x1());
  }

  // Effect---
  userName1 = signal('Ravi');
  // constructor() {
  //   effect(() => {
  //     console.log(this.userName1());
  //   });
  // }

  count2 = signal(0);
  displayNext = false;

  toggleShowNext() {
    // this.displayNext = !this.displayNext;
    this.count2.set(this.count2() + 1);
  }
  constructor() {
    effect(() => {
      if (this.count2() == 2) {
        this.displayNext = true;
        setTimeout(() => {
          this.displayNext = false;
        }, 2000);
      } else {
        this.displayNext = false;
      }
    });
  }

  // For Loop contextual Variables---
  // users1 = ['Anil', 'Aman', 'Anish', 'Anshu', 'Vipin', 'Bruce', 'Tony', 'Peter'];
  users1 = '';

  // Two Way Binding---
  // Note:-
  // import FormsModule
  // -----------------
  name1 = '';

  changeName(event: Event) {
    const val = (event.target as HTMLInputElement).value;
    this.name1 = val;
  }

  // To Do List (Handle all function and event)---
  task = '';
  taskLest: { id: number; task: string }[] = [];

  addTask() {
    this.taskLest.push({ id: this.taskLest.length + 1, task: this.task });
    console.log(this.taskLest);
    this.task = '';
  }
  deleteTask(taskId: number) {
    this.taskLest = this.taskLest.filter((item) => item.id != taskId);
  }

  // Dynamic Styling---
  bgColor = 'red';
  // fontSize = '30px';
  fontSize = '30';

  headingSizeBig = '40px';
  headingSizeSmall = '20px';
  zoom = true;
  // zoom = false;

  updateHeadingSize() {
    this.zoom = !this.zoom;
  }

  // Routing---
}
