<div class="main-content">
  <div class="page-header">
    <h1 class="page-title">Overview</h1>
  </div>

  <div class="overview-card-container">
    <div class="custom-card">
      <div class="overview-card">
        <i class="fa fa-info-circle icon" aria-hidden="true"></i>
        <div class="info">
          <h3 class="dark-text">48</h3>
          <p class="text-5">Total projects</p>
        </div>
      </div>
    </div>

    <div class="custom-card">
      <div class="overview-card">
        <i class="fa fa-info-circle icon" aria-hidden="true"></i>
        <div class="info">
          <h3 class="dark-text">48</h3>
          <p class="text-5">Total projects</p>
        </div>
      </div>
    </div>

    <div class="custom-card">
      <div class="overview-card">
        <i class="fa fa-info-circle icon" aria-hidden="true"></i>
        <div class="info">
          <h3 class="dark-text">48</h3>
          <p class="text-5">Total projects</p>
        </div>
      </div>
    </div>
    
    <div class="custom-card">
      <div class="overview-card">
        <i class="fa fa-info-circle icon" aria-hidden="true"></i>
        <div class="info">
          <h3 class="dark-text">48</h3>
          <p class="text-5">Total projects</p>
        </div>
      </div>
    </div>
  </div>

  <h5 class="header-5">Projects</h5>
  <p class="h3">12,345,678</p>

  <!-- Chart -->

  <style>
    .chart {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      grid-template-rows: repeat(100, 1fr);
      grid-column-gap: 5px;
      height: 500px;
      width: 100%;
      padding: 5px 10px;
    }

    .bar {
      border-radius: 5px 5px 0 0;
      background-color: #ff4136;
      grid-row-start: 1;
      grid-row-end: 101; 
    }

    .grid {
      grid-gap: 5px;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: repeat(4, 1fr);
    }

    .special-col {
      grid-row: 2 / 4;
      background-color: #222;
    }

    .bar[data-value="1"] {
      grid-row-start: 50;
    }
  </style>

  <div class="chart">
    <div class="bar" data-value="1"></div>
    <div class="bar" data-value="2"></div>
    <div class="bar" data-value="3"></div>
    <div class="bar" data-value="4"></div>
    <div class="bar" data-value="5"></div>
    <div class="bar" data-value="6"></div>
    <div class="bar" data-value="7"></div>
    <div class="bar" data-value="8"></div>
    <div class="bar" data-value="9"></div>
    <div class="bar" data-value="10"></div>
    <div class="bar" data-value="11"></div>
    <div class="bar" data-value="12"></div>
  </div>

</div>

<!-- Side contents -->
<div class="main-side">

  <h2 class="header-4">Other</h2>

  <style>
    .side-content {
      margin: 20px 0;
      color: var(--primary-text);
    }

    .month {
      width: 100%;
      background: white;
      text-align: center;
      border-style: solid none;
      border-width: 1px;
      border-color: var(--border-rgba-color);
    }

    .month ul {
      margin: 0;
      padding: 0;
    }

    .month ul li {
      font-size: 12px;
      text-transform: uppercase;
    }

    .weekdays {
      display: flex;
      margin: 0;
      background-color: #f4f4f4;
    }

    .weekdays li, .days li  {
      flex-basis: 14.28571428571429%;
      font-size: 12px;
      text-align: center;
    }

    .days {
      display: flex;
      flex-wrap: wrap;
      margin: 0;
      padding: 0;
    }

    .days li.active {
      padding: 5px;
      background: var(--action);
      color: white !important
    }

    .month ul li, .weekdays, .days li {
      padding: 5px 0;
    }

    #events ul {
      list-style-type: none;
    }

  </style>

  <div class="side-content" id="events">
    <h5 class="header-5">Events</h5>
    <!-- Calendar -->
    <div class="month">      
      <ul class="linear space-between">
        <li class="prev">&#10094;</li>
        <li class="dark-text">December 2022</li>
        <li class="next">&#10095;</li>
      </ul>
    </div>
    
    <ul class="weekdays">
      <li>Su</li>
      <li>Mo</li>
      <li>Tu</li>
      <li>We</li>
      <li>Th</li>
      <li>Fr</li>
      <li>Sa</li>
    </ul>
    
    <ul class="days">  
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li class="active">1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
      <li>5</li>
      <li>6</li>
      <li>7</li>
      <li>8</li>
      <li>9</li>
      <li>10</li>
      <li>11</li>
      <li>12</li>
      <li>13</li>
      <li>14</li>
      <li>15</li>
      <li>16</li>
      <li>17</li>
      <li>18</li>
      <li>19</li>
      <li>20</li>
      <li>21</li>
      <li>22</li>
      <li>23</li>
      <li>24</li>
      <li>25</li>
      <li>26</li>
      <li>27</li>
      <li>28</li>
      <li>29</li>
      <li>30</li>
      <li>31</li>
    </ul>
    
  </div>

  <div class="side-content" id="messages">
    <div class="side-content-header">
      <h5 class="header-5">Messages</h5>
      <button class="btn link-btn">View</button>
    </div>

    <style>
      .chat-box {
        display: flex;
        justify-content: stretch;
        padding: 10px 0;
        border-width: 1px;
        border-color: var(--border-rgba-color);
        border-style: solid none;
        cursor: pointer;
        gap: 10px;
      }

      .chat-box:hover .name {
        color: var(--palette3);
      }

      .chat-box .content {
        overflow: hidden;
        flex: 1 0;
      }

      .chat-box .diplay-image {
        flex-basis: 20%;
        width: 0;
        max-width: 50px;
        min-height: 40px;
        max-height: 50px;
        object-fit: cover;
        background-color: red;
      }

      .chat-box .name {
        color: var(--palette2);
        font-size: 1rem;
        font-weight: 700;
        margin: 0;
      }

      .chat-box .message {
        display: block;
        margin: 0;
        padding: 0;
        font-size: .75rem;
        width: 100%;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
      }
    </style>

    <!-- Messages -->
    <div class="chat-box">
      <img class="diplay-image" src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t39.30808-1/299088740_1196979717823399_7518303659892027192_n.jpg?stp=dst-jpg_p320x320&_nc_cat=111&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeGBrWemSqQRyZqfcNB9uoZBqfeXZDtcsGip95dkO1ywaO9JZXs48xlTpaecf4X3ONJ1hi0ZUko7gLOIcUuNOoyB&_nc_ohc=P3wifdm6izUAX94wFsH&_nc_ht=scontent.fmnl3-3.fna&oh=00_AfA7jwSbP1l70p80Q0glPRDcjsTHTehhSEIu5WLUeGkcLA&oe=638CBBA0" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
      <div class="content">
        <p class="name">Desteen</p>
        <small class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim velit. Pellentesque sodales nibh sit amet dolor luctus pretium.</small>
      </div>
    </div>

    <div class="chat-box">
      <img class="diplay-image" src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t39.30808-1/275203833_4833479920081497_9099316294859763547_n.jpg?stp=dst-jpg_p320x320&_nc_cat=103&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHzuayGDQAi2LlsvvbJRFH8rsZUSqEcR4muxlRKoRxHifN5rNASFUZaTY1-qHRT1abJbd0CbBi4OxLlvmBZSi5p&_nc_ohc=BFoPowAM2EEAX-GMuoo&_nc_ht=scontent.fmnl3-3.fna&oh=00_AfDeryDBzdu0Vss5WhyNrrfzrvPHFJntqEyk5IqHUpOiXA&oe=638D61AE" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
      <div class="content">
        <p class="name">Momshie</p>
        <small class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim velit. Pellentesque sodales nibh sit amet dolor luctus pretium.</small>
      </div>
    </div>
    
    <div class="chat-box">
      <img class="diplay-image" src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/309500238_5380815078706261_3463532223795883956_n.jpg?stp=dst-jpg_p320x320&_nc_cat=102&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeFFDXb8j16Q6v_8nnY-l_N542idz-jJfebjaJ3P6Ml95oVX61vYVQqYVxDr_mIAXXsS_yfzXm6BI1UgB0wz8A_7&_nc_ohc=R4-1YSQjsTgAX-ShZJY&_nc_ht=scontent.fmnl3-4.fna&oh=00_AfCqimMaaO9RpxsNXUT8hprKQQ2QQeSoWRZ9QzbbcBPHBA&oe=638D3FE7" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
      <div class="content">
        <p class="name">Elkatakiku</p>
        <small class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim velit. Pellentesque sodales nibh sit amet dolor luctus pretium.</small>
      </div>
    </div>

    <div class="chat-box">
      <img class="diplay-image" src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t39.30808-1/317077704_5890770737640833_9143806547782294516_n.jpg?stp=dst-jpg_p320x320&_nc_cat=110&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeGPsTsQ3ivsGYL193PFbsJSkLcov6d_VlGQtyi_p39WUWADuEczk1SxWl9jPiurBnfvS-3rHDwfmrfNUQo8XkJd&_nc_ohc=CNimpNeWOQoAX-EvPNO&tn=ncxdeSyY_IUTy3C7&_nc_ht=scontent.fmnl3-3.fna&oh=00_AfCvRkmtBbClD3gQMRm_4z3yxC7IYZYHlmjBBp7lnxgJqw&oe=638E4122" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
      <div class="content">
        <p class="name">Takihiro</p>
        <small class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et enim velit. Pellentesque sodales nibh sit amet dolor luctus pretium.</small>
      </div>
    </div>
  </div>
</div>