import React, { Component } from 'react';
import { listKnowledge,} from '../../api/knowledgeApi'


class KnowledgeIndex extends Component {
  render() {
    return (
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-md-12">
            <div className="card">
              <div className="card-header">Knowledge Base</div>

              <div className="card-body">
                Knowledge Base
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default KnowledgeIndex