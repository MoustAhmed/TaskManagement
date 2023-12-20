import React, { useState, useEffect } from 'react';
import './Body.css';


const Body = () => {
    return (
      <div class= "container">
          <div class ="row justify-com">
              <div class = "col-lg-10">
              <form>
              <div className="mb-3">
                  <label htmlFor="title" className="form-label">Title</label>
                  <input type="text" className="form-control" id = "title"placeholder="Enter Title" />
  
              </div>
              <div class="mb-3">
                  <label for="desc" class="form-label">Description</label>
                  <textarea class="form-control" id="desc" rows="3" placeholder="Enter Description"></textarea>
              </div>
              <button type="submit" className="btn btn-primary">Add Note</button>
          </form>
              </div>
          </div>
      </div>
    );
  };
  
  export default Body;