module.exports = {
  apps: [{
    name: 'tutorial-2',
    script: './index.js'
  }],
  deploy: {
    production: {
      user: 'ubuntu',
      host: 'ec2-18-217-122-161.us-east-2.compute.amazonaws.com',
      key: '~/.ssh/theFWA.pem',
      ref: 'origin/master',
      repo: 'git@github.com:nathan66669/tutorial-pt-2.git',
      path: '/home/ubuntu/tutorial-2',
      'post-deploy': 'npm install && pm2 startOrRestart ecosystem.config.js'
    }
  }
}
