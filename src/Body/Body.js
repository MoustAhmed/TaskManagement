import React from 'react';
import './Body.css';

const Body = () => {
    return (
        <div className="body">
            <div className="title-bar">
                <input type="text" placeholder="Title" />
            </div>
            <div className="text-bar">
                <textarea placeholder="Your note goes here..."></textarea>
            </div>
        </div>
    );
};

export default Body;
