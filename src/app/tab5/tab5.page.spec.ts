import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';
import { ExploreContainerComponentModule } from '../explore-container/explore-container.module';

import { tab5Page } from './tab5.page';

describe('tab5Page', () => {
  let component: tab5Page;
  let fixture: ComponentFixture<tab5Page>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [tab5Page],
      imports: [IonicModule.forRoot(), ExploreContainerComponentModule]
    }).compileComponents();

    fixture = TestBed.createComponent(tab5Page);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
