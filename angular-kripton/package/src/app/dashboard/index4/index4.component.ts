import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-index4',
  templateUrl: './index4.component.html',
  styleUrls: ['./index4.component.css']
})
export class Index4Component implements OnInit {

  constructor() { 
        this.setThemeVersion();
    }


  
  quickTransfer = [
        {
          name: "Samuel",
          username: "@sam224",
          image: "assets/images/contacts/1.jpg",
        }
  ];
  setThemeVersion() {
    document.body.setAttribute('data-theme-version', 'dark');
  }

  ngOnInit(): void {
  }
  
    ngOnDestroy(): void {
      document.body.setAttribute('data-theme-version', 'light');
      
    }

}
