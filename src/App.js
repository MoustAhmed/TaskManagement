import React from 'react';
import Header from './Header/Header';
import Body from './Body/Body';
import SideBar from './SideBar/SideBar';
import Footer from './Footer/Footer';


const App = () => {
    return (
        <div className="app">
            <Header />
            <div className="content">
                <SideBar />
                <Body />
            </div>
            <Footer />
        </div>
    );
};

export default App;
