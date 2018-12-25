import Test from './components/Test'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import React, { Component } from 'react'
import { render } from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom'

// import AppRoute from './components/App';
import Example from './components/Example'
import KnowledgeIndex from './components/knowledge/KnowledgeIndex'
import RoleIndex from './components/role/RoleIndex'
import UserIndex from './components/user/UserIndex'

class App extends Component {
  render () {
    return (
      <BrowserRouter>
        <div>
          <Switch>
            <Route exact path='/home' component={Example} />
            <Route exact path='/knowledge' component={KnowledgeIndex} />
            <Route exact path='/user' component={UserIndex} />
            <Route exact path='/role' component={RoleIndex} />
            <Route exact path='/test' component={Test} />
          </Switch>
        </div>
      </BrowserRouter>
    )
  }
}

render(<App />, document.getElementById('main-container'));

// require('./components/Example');
