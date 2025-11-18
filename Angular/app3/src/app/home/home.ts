import { Component, signal } from '@angular/core';
import { Products } from '../services/products';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-home',
  imports: [CommonModule],
  templateUrl: './home.html',
  styleUrl: './home.css',
})
export class Home {
  // productList: any[] = [];
  productList = signal<any[]>([]);
  constructor(private productService: Products) {}

  ngOnInit() {
    this.productService.getProductList().subscribe((data: any) => {
      // console.log(data);
      // console.log(data.products);
      // this.productList = data.products;   //Zoneless hone se real time UI update naho hoga

      this.productList.set(data.products);
    });
  }
}
