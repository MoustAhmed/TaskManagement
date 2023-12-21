import React, { useState, useEffect } from 'react';
import './Body.css';
import axios from 'axios';

const Body = () => {

    const [title, setTitle] = useState("");
    const [description, setDescription] = useState("");
    const [notes, setNotes] = useState([]);

    useEffect(() => {
        axios.get('http://localhost/NotesApp/note-taking-app/server/read.php')
            .then((response) => {
                setNotes(response.data);
            })
            .catch((error) => {
                console.error(`Error fetching data: ${error}`);
            })
    }, []);

    const addNote = (event) => {
        event.preventDefault();
        axios.post('http://localhost/NotesApp/note-taking-app/server/create.php', { title, description })
            .then(() => {
                setTitle("");
                setDescription("");
                return axios.get('http://localhost/NotesApp/note-taking-app/server/read.php');
            })
            .then((response) => {
                setNotes(response.data);
            })
            .catch((error) => {
                console.error(`Error adding note: ${error}`);
            });
    };
    
    return (
       <body>
      <div className="container">
                <div className="row justify-com">
                    <div className="col-lg-10">
                        <form onSubmit={addNote}>
                            <div className="mb-3">
                                <label htmlFor="title" className="form-label">Title</label>
                                <input type="text" className="form-control" id="title" placeholder="Enter Title" value={title} onChange={e => setTitle(e.target.value)} />
                            </div>
                            <div className="mb-3">
                                <label htmlFor="desc" className="form-label">Description</label>
                                <textarea className="form-control" id="desc" rows="3" placeholder="Enter Description" value={description} onChange={e => setDescription(e.target.value)}></textarea>
                            </div>
                            <button type="submit" className="btn btn-primary">Add Note</button>
                        </form>
                    </div>
                </div>
            </div>
     <div class ="container ">
        <div class = "col-lg-10">
            <h1>Your Notes </h1>
            <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary mx-2">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
            </div>
        </div>
     </div>
     </body>
            
      
    );
  };

export default Body;