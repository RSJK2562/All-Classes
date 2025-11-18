import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { CurrencyConvertorPipe } from '../pipe/currency-convertor-pipe';

@Component({
  selector: 'app-pipes',
  // imports: [],
  imports: [CommonModule, CurrencyConvertorPipe],
  templateUrl: './pipes.html',
  styleUrl: './pipes.css',
})
export class Pipes {
  title = 'coder';
  name = 'MR RavI';

  data = new Date();

  amount = 10;

  // Custom Pipes
  // import custom-pipe (CurrencyConvertorPipe)
  amounts = 10;
}
