import { Component } from '@angular/core';
import { Product } from '../services/product';

@Component({
  selector: 'app-service',
  imports: [],
  templateUrl: './service.html',
  styleUrl: './service.css',
})
export class Service {
  productData:
    | { id: number; name: string; email: string; phone: string; role: string }[]
    | undefined;

  constructor(private productService: Product) {}

  getProductData() {
    this.productData = this.productService.getProductData();
    console.log(this.productData);
  }
}
