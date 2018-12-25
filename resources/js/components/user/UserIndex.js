import React, { Component } from 'react';
import { listUser,} from '../../api/userApi'


class UserIndex extends Component {
  constructor(props) {
    super(props)
    this.state = {
    }
  }

  componentDidMount () {
    listUser()
      .then(res => {
        if (res && res.data && res.data.success) {
          console.log('res.data =>', res.data)
          alert('success')
        } else {
          console.log('res =>', res)
          alert('error')
        }
      })
  }

  render() {
    return (
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-md-8">
            <div className="card">
              <div className="card-header">User List</div>

              <div className="card-body">
                <table className="table">
                  <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default UserIndex