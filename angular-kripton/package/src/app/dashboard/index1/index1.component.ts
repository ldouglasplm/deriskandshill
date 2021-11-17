import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-index1',
  templateUrl: './index1.component.html',
  styleUrls: ['./index1.component.css']
})
export class Index1Component implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }
  
  quickTransfer = [
        {
          name: "Samuel",
          username: "@sam224",
          image: "assets/images/contacts/1.jpg",
        }
  ];

}
