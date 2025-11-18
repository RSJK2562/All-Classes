import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Forms1 } from './forms1';

describe('Forms1', () => {
  let component: Forms1;
  let fixture: ComponentFixture<Forms1>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Forms1]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Forms1);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
